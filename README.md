# Marketplace README

Welcome to the Marketplace project! This is a web application built using PHP, Docker, and MariaDB. It allows users to create accounts, log in, use a "Remember Me" feature, recover forgotten emails, confirm their email addresses, purchase products using Stripe, and post products for sale online.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Features](#features)
- [Usage](#usage)
- [License](#license)

## Prerequisites

Before you can run this project, make sure you have the following prerequisites installed:

- Docker: [Installation Guide](https://docs.docker.com/get-docker/)
- Docker Compose: [Installation Guide](https://docs.docker.com/compose/install/)
- A Stripe account: [Stripe](https://stripe.com/)

## Getting Started

1. Clone this repository to your local machine:

    ```shell
    git clone https://github.com/vypperfo/marketplace.git
    ```

2. Change to the project directory:

    ```shell
    cd marketplace
    ```

3. Build and start the Docker containers:

    ```shell
    docker-compose up -d
    ```

4. Access the application in your web browser at `http://localhost`. The application should now be up and running.

## Features

This marketplace application includes the following features:

- User account creation and authentication.
- "Remember Me" functionality for persistent login sessions.
- Email confirmation for user accounts.
- Password reset for forgotten passwords.
- Product listing and purchase using Stripe for payments.

## Usage

Once the application is running, you can access it in your web browser. Here are some basic usage instructions:

- Create a new user account or log in with existing credentials.
- Browse the marketplace to view listed products.
- To post a product for sale, use the "Post Product" feature.
- To make a purchase, select a product, and complete the payment process using Stripe.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute it according to the terms of the license.

Enjoy building your online marketplace with PHP, Docker, and MariaDB! If you have any questions or encounter issues, please refer to the documentation or create an issue on the GitHub repository.
