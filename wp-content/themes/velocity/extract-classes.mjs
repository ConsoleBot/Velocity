// extract-classes.js
import mysql from 'mysql2/promise';
import fs from 'fs';

// Database connection settings
const connection = await mysql.createConnection({
  host: 'localhost',       // adjust if needed
  user: 'root',            // your MySQL username
  password: '',            // your MySQL password
  database: 'velocity_schema'
});

// Query only post_content starting with '<'
const [rows] = await connection.execute(`
  SELECT post_content 
  FROM wp_posts 
  WHERE post_status = 'publish'
    AND post_content LIKE '<%'
`);

// Regex to match Tailwind-style classes
const classRegex = /[a-zA-Z0-9_-]+(?:\[[^\]]+\])?(?::[a-zA-Z0-9_-]+(?:\[[^\]]+\])?)?/g;

let allClasses = new Set();

rows.forEach(row => {
  const matches = row.post_content.match(classRegex);
  if (matches) {
    matches.forEach(cls => allClasses.add(cls));
  }
});

await connection.end();

// Save as JSON
fs.writeFileSync(
  './tailwind.safelist.json',
  JSON.stringify(Array.from(allClasses), null, 2)
);

console.log(`Extracted ${allClasses.size} classes from DB that start with "<".`);
