# Personal Blogging Platform API

## Overview

This project is a RESTful API designed to power a personal blog. It provides essential CRUD (Create, Read, Update, Delete) operations for managing blog articles. The API interacts with a database (either SQL or NoSQL) to store and retrieve article data, and it includes functionality for handling article creation, retrieval, updating, and deletion.

## Skills and Technologies Used

- **CRUD Operations**: To perform the basic operations such as creating, reading, updating, and deleting articles.
- **Databases**: Either SQL (e.g., MySQL, PostgreSQL) or NoSQL (e.g., MongoDB) to store and manage articles.
- **RESTful API**: Server-side API that follows REST principles, enabling easy communication between the backend and clients.

## API Endpoints

### 1. **Get a List of Articles**

- **Endpoint**: `/articles`
- **Method**: `GET`
- **Description**: Returns a list of all published articles. You can apply optional reltionship such as tags.
- **Query Parameters**:
  - `include_tags`: Show article associated tags .

### 2. **Get a Single Article**

- **Endpoint**: `/articles/{id}`
- **Method**: `GET`
- **Description**: Returns a specific article identified by its unique ID.

### 3. **Create a New Article**

- **Endpoint**: `/articles`
- **Method**: `POST`
- **Description**: Creates a new article with the provided content. The article will be saved in the database and made available for reading.
- **Request Body**:
  - `title`: The title of the article.
  - `body`: The body of the article.

### 4. **Update an Article**

- **Endpoint**: `/articles/{id}`
- **Method**: `PUT`
- **Description**: Updates an existing article by its ID. The title, content, or tags of the article can be modified.
- **Request Body**:
  - `title`: The updated title of the article.
  - `body`: The updated body of the article.

### 5. **Delete an Article**

- **Endpoint**: `/articles/{id}`
- **Method**: `DELETE`
- **Description**: Deletes a specific article from the database using its ID.

### 6. **Attach Tag with article**
- **Endpoint**: `/articles/{id}/tags`
- **Method**: `POST`
- **Description**: Attach a specific tag from the database using its ID to an article.

## Conclusion

This API provides the foundational capabilities to manage a personal blog through a simple, clean interface. By utilizing a database for storage, it ensures scalability and efficiency in managing blog content.
