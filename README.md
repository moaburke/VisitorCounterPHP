# Visitor Counter Project

This project is a simple PHP-based visitor counter that increments each time a user visits the page. The visitor count is read from a file, incremented, and displayed using images for each digit. The design is styled with HTML and CSS, and it includes the Google Font "Limelight" for aesthetics.

## Features

- **Visitor Counter**: The counter keeps track of the number of visits by reading and writing to a text file (`access_counter.txt`).
- **Image-based Display**: The visitor count is displayed as images, with each digit shown as a corresponding image.
- **Styling**: The page is styled using external CSS and Google Fonts for a modern look.
- **Responsive Design**: The layout adjusts for various screen sizes.

## Technologies Used

- **PHP**: Server-side logic for reading and writing the visitor count.
- **HTML**: The structure of the page.
- **CSS**: For styling and layout.
- **Google Fonts**: The "Limelight" font is used for the page.
- **Images**: Each digit is represented by an image file (e.g., `0.png`, `1.png`, etc.).

## How It Works
1. The counter value is stored in access_counter.txt inside the data/ folder.
2. Each time the page loads, PHP reads the current value from the file, increments it, and writes it back.
3. The visitor count is then displayed using images, one image per digit.
4. The design is responsive and adapts to different screen sizes.
