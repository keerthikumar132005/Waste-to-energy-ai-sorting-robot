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
- [License](#license)

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

link: samplediagram.png

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

