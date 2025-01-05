# E-Payment App

This project is an E-payment application that allows users to make payments online. The project integrates with the Flutterwave payment gateway for processing transactions. Below is a step-by-step guide on how to set up and run the project.

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Payment Integration](#payment-integration)
- [Database Structure](#database-structure)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/e-payment-app.git
    cd e-payment-app
    ```

2. Set up your local server (e.g., XAMPP, WAMP, MAMP) and place the project in the appropriate directory (e.g., `htdocs` for XAMPP).

3. Ensure you have PHP and MySQL installed on your machine.

## Usage

1. Start your local server.

2. Access the project in your web browser:
    ```
    http://localhost/e-payment-app
    ```

## Configuration

1. **Flutterwave API Keys**: Obtain your Flutterwave API keys from the [Flutterwave Dashboard](https://dashboard.flutterwave.com/).

2. **Config File**: Update the `config.php` file with your database credentials and API keys.

## Payment Integration

The payment integration is handled using Flutterwave. Below are the key steps involved:

1. **Create a Simple Payment Form**:
    - An HTML form collects the payment details from the user.
    - A JavaScript function initializes the Flutterwave payment popup.

2. **Verify Payment**:
    - After the payment, Flutterwave redirects the user to `redirect.php`.
    - `redirect.php` extracts the transaction ID and uses CURL to verify the payment with Flutterwave's API.
    - If the payment is successful, it updates the database and displays a success message.

3. **Redirect to Dashboard**:
    - The success message is displayed for a few seconds before redirecting the user to `dashboard.php`.

## Database Structure

Create the database and table to store the transaction details:

```sql
CREATE DATABASE epayment_app;

USE epayment_app;

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    transaction_id VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    currency VARCHAR(10) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
