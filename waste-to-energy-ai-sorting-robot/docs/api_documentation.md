# API Documentation for Waste to Energy AI Sorting Robots

This document provides details about the available API endpoints for the **Waste to Energy AI Sorting Robots** project. Each endpoint serves a specific function in interacting with the backend, such as handling chatbot queries, retrieving dashboard data, and receiving data from the robots.

---

## Table of Contents

1. [Chatbot API](#chatbot-api)
2. [Dashboard API](#dashboard-api)
   - [Energy Statistics](#get-dashboardenergy-stats)
   - [Waste Metrics](#get-dashboardwaste-metrics)
3. [Robot Data Upload API](#robot-data-upload-api)
   - [Upload Waste Data](#post-robotupload-waste)
   - [Upload Energy Data](#post-robotupload-energy)
4. [Error Codes](#error-codes)

---

## Chatbot API

### POST `/api/chat/respond`

**Description**: Processes a chatbot query from the frontend and returns an AI-generated response.

**Request Headers**:

- `Content-Type: application/json`

**Request Body**:

```json
{
  "query": "What is the energy output today?"
}
```
**Response**:

```json
{
  "response": "The energy output today is 5 kWh."
}
```

## Dashboard API
### GET `/api/dashboard/energy-stats`
***Description**: Retrieves energy statistics, such as the total energy generated and the current output, for display on the dashboard.*

**Request Headers**:

-   `Accept: application/json`

**Response**:

```json
{
  "totalEnergy": 150,
  "currentOutput": 5
}
```
**Response Fields**:

-   *totalEnergy (float): The cumulative amount of energy generated, in kWh.*
-   *currentOutput (float): The latest recorded energy output, in kW.*


###  GET `/api/dashboard/waste-metrics`
***Description**: Retrieves waste metrics, including the total waste processed and breakdown by category (e.g., recyclable, organic).*

**Request Headers**:

-   *Accept: application/json*

**Response**:

```json
{
  "totalWaste": 100,
  "recyclableWaste": 60,
  "organicWaste": 40
}
```

**Response Fields**:
-   ***totalWaste (float)**: Total amount of waste processed, in kilograms.*
-   ***recyclableWaste (float)**: Amount of recyclable waste processed, in kilograms.*
-   ***organicWaste (float)**: Amount of organic waste processed, in kilograms.*

##  Robot Data Upload API
### POST `/api/robot/upload-waste`
***Description**: Allows the robot to upload waste classification data to the backend. Each entry records the type of waste, the amount, and the timestamp of the data.*

**Request Headers**:

`Content-Type: application/json
Request Body`:
```json
{
  "type": "recyclable",
  "amount": 50,
  "timestamp": "2024-01-01T10:00:00Z"
}
```
**Request Fields**:

-   *type (string): Type of waste (e.g., "recyclable", "organic").*
-   *amount (float): Amount of waste in kilograms.*
-   *timestamp (string): ISO 8601 formatted timestamp of when the data was recorded.*

**Response**:

```json
{
  "status": "success"
}
```
**Notes**:

-   *This endpoint expects the robot to send data regularly, allowing the system to track waste processing in real-time.*

### POST `/api/robot/upload-energy`
***Description**: Allows the robot to upload energy generation data to the backend. Each entry records the energy generated, the current output, and the timestamp.*

**Request Headers**:

-   `Content-Type: application/json
Request Body`:

**Request Body**:

```json
{
  "energy_generated": 30,
  "current_output": 5,
  "timestamp": "2024-01-01T10:00:00Z"
}
```

**Request Fields**:

-   ***energy_generated (float)**: Amount of energy generated, in kWh.*
-   ***current_output (float)**: Current power output, in kW.*
-   ***timestamp (string)**: ISO 8601 formatted timestamp of when the data was recorded.*

**Response**

```json
{
  "status": "success"
}
```

**Notes**:

-  *This endpoint is expected to receive data periodically from the robot, allowing the backend to monitor energy output over time.*


## Error Codes
This document provides information on the HTTP status codes and error messages that may be returned by the API for error handling.

| Status Code | Description                                      |
|-------------|--------------------------------------------------|
| 200         | OK - Request succeeded                           |
| 201         | Created - Resource successfully created          |
| 400         | Bad Request - Invalid or missing parameters      |
| 401         | Unauthorized - Invalid credentials               |
| 404         | Not Found - Resource does not exist              |
| 500         | Internal Server Error - An unexpected error occurred on the server side |

### Usage
Use these status codes to handle API responses and to provide clear error messages in your application.

---
