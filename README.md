# Waste to Energy AI Sorting Robot

## Overview

The *Waste to Energy AI Sorting Robot* is a cutting-edge solution that leverages Artificial Intelligence (AI) and robotics to automate waste sorting and convert selected waste materials into renewable energy. This project uses an AI-powered robot system to efficiently identify, sort, and process waste. By doing so, it aims to optimize waste management, reduce environmental pollution, and contribute to sustainable energy generation.

The project includes:
- *AI Sorting Robots* that automatically classify and sort waste.
- *Dashboard* to monitor real-time data on waste sorting and energy generation.
- *Chatbot Interface* powered by Serverless Inference, allowing users to interact and query the system.
- *Data Processing Backend* for managing and storing waste and energy data.

---

## Table of Contents

- [Features](#features)
- [System Architecture](#system-architecture)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Testing](#testing)
- [Contributing](#contributing)

---

## Features

1. *AI-Based Waste Sorting*: Uses AI models to classify waste into recyclable, organic, and other categories, automating waste processing tasks.
2. *Energy Conversion*: Converts processed waste into renewable energy and tracks the energy generated.
3. *Interactive Dashboard*: Real-time metrics on energy output, waste sorted, and robot activity.
4. *Chatbot Interface*: Users can interact with the system, asking questions related to waste management and energy production.
5. *Robot Data Upload*: Robots report data back to the backend for further analysis, monitoring, and reporting.
6. *Serverless Inference for Chatbot*: Uses AWS Lambda for inference, reducing latency and increasing scalability.

---

## System Architecture

The system consists of multiple components:

1. *Frontend: User interface built with **React* for the dashboard and chatbot.
2. *Backend API: Developed using **Laravel*, handling data processing, API endpoints, and database management.
3. *Database*: MySQL database storing records of waste sorted, energy generated, and robot activity.
4. *Robot System: A hardware setup, potentially based on a **Raspberry Pi*, equipped with a camera and sensors to identify and sort waste.
5. *Machine Learning Model*: Deployed on the robot to classify waste in real time.
6. *Serverless Inference (AWS Lambda)*: For chatbot responses using pre-trained models.

### Architecture Diagram

![Architechture Diagram](https://bit.ly/high-level-architecture-diagram)

---

## Tech Stack

- *Frontend*: React.js, Bootstrap, Axios
- *Backend*: Laravel, PHP, MySQL, WebSocket (for real-time data)
- *Machine Learning*: TensorFlow (Python)
- *Serverless*: AWS Lambda (for chatbot inference)
- *Robot Hardware*: Raspberry Pi or similar, Camera, AI model deployment

---

## Installation

### Prerequisites

1. *Backend*:
   - PHP 7.4 or higher
   - Composer
   - MySQL
2. *Frontend*:
   - Node.js
   - npm
3. *Robot*:
   - Python 3.x
   - TensorFlow
   - Raspberry Pi (or similar hardware)
4. *Serverless Inference*:
   - AWS account with access to Lambda

### Setting Up the Project

1. *Clone the Repository*:
   ```bash
   git clone https://github.com/keerthikumar132005/Waste-to-energy-ai-sorting-robot.git
   cd Waste-to-energy-ai-sorting-robot
### Backend Setup

1. *Navigate to the backend folder*:
    ```bash
    cd src/backend
2. *Install dependencies*:
    ```bash
    composer install
3. *Configure environment settings*:
    ```bash
    cp .env.example .env
    php artisan key:generate
4. *Set up the database in .env file.*
5. *Run migrations*:
    ```bash
    php artisan migrate
6. *Serve the backend*:
    ```bash
    php artisan serve
    ```
### Frontend Setup
1. *Go to the frontend folder*:
    ```bash
    cd ../frontend
2. *Install dependencies*:
    ```bash
    npm install
3. *Start the frontend server*:
    ```bash
    npm start
    ```
### Chatbot Serverless Setup (AWS Lambda)
1.  *Set up an AWS Lambda function for chatbot responses*.
2.  *Deploy your chatbot model to Lambda and configure the endpoint in the frontend*.
### Usage
1.  ***Dashboard**: View real-time stats on waste sorting, energy generation, and robot activity.*
2.  ***Chatbot**: Query information about system metrics, waste sorting, and energy output.*
3.  ***Robot Uploads**: Robots will periodically upload waste and energy data for tracking.*

### API Documentation
*Refer to the API Documentation for details on available endpoints.*

### Example Endpoints
*   GET /api/dashboard/energy-stats: Fetch energy statistics.
*   POST /api/chat/respond: Interact with the chatbot.
*   POST /api/robot/upload-waste: Robots upload waste data.
*   POST /api/robot/upload-energy: Robots upload energy data.

## Testing
###  Backend Testing
1.  *Run All Tests*:
    ```bash
    php artisan test
2. *Testing Structure*:
    *   Feature Tests: Tests for chatbot, dashboard, and robot endpoints.
    *   Unit Tests: Model-specific tests, including WasteRecord and EnergyRecord.
### Frontend Testing
1.  *Run Frontend Tests*:
    ```bash
    npm test
    ```
### Robot Testing (Python)
*Test the waste sorting AI model using sample images and ensure accurate waste categorization.*

##  Contributing
1. *Fork the repository.*
2. *Create a new branch (git checkout -b feature-branch).*
3. *Make your changes and commit (git commit -am 'Add new feature').*
4. *Push the branch (git push origin feature-branch).*
5. *Open a Pull Request.*

##  Roadmap
*   Phase 1: AI-powered waste sorting robot setup.
*   Phase 2: Dashboard and chatbot implementation.
*   Phase 3: Serverless inference setup and chatbot integration.
*   Phase 4: Integration testing and optimization.

##  Contact
*For further queries or support, contact:*
*   Keerthi Kumar - Project Lead
*   Email: keerthikumar132005@gmail.com
