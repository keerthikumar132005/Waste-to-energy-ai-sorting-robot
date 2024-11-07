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
