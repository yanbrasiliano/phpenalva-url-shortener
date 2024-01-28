# PHPenalva URL Shortener

## Overview
PHPenalva URL Shortener is a simple yet efficient tool built using the PHPenalva microframework. It enables users to shorten lengthy URLs for easier sharing and management. This project integrates with the Ulvis API for URL shortening services.

### Features
- User-friendly interface for easy URL shortening.
- Quick redirection to original URLs using shortened links.
- Integration with the Ulvis API for reliable URL shortening.
- Built with PHPenalva, leveraging its simplicity and efficiency.

## Integration with Ulvis API
This project uses the [Ulvis API](https://ulvis.net/developer.html) to shorten URLs. The API provides a straightforward way to convert long URLs into more manageable shortened links, which are then stored in the application's database for redirection purposes.

## Installation

### Prerequisites
- PHP 7.4 or higher.
- Web Server with URL rewriting (Apache, Nginx, IIS).
- Database (MySQL, MariaDB, PostgreSQL, SQLite).
- Composer.

### Steps
1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/phpenalva-url-shortener.git
    ```
2. Navigate to the project directory:
    ```bash
    cd phpenalva-url-shortener
    ```
3. Install dependencies:
    ```bash
    composer install
    ```

4. Create a database and import the `database.sql` file located in the `database` directory.
   
5. Copy the `.env.example` file and rename it to `.env`. Then, fill in the database credentials and the base URL of your application.

## Usage
To start using the PHPenalva URL Shortener:
1. Run your web server.
2. Access the project via your web browser.
3. Enter a URL in the input box and click 'Shorten' to receive a shortened URL.

## Contributing
Contributions to PHPenalva URL Shortener are welcome! Whether it's bug fixes, new features, or documentation improvements, your help is appreciated.

Please follow these steps to contribute:
1. Fork the repository.
2. Create a new branch for your feature (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

## License
PHPenalva URL Shortener is released under the MIT License. See the `LICENSE` file for more details.

Thank you for using PHPenalva URL Shortener!
