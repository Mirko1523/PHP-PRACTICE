<?php
header("Content-Type: text/css");
?>


body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f4f9;
  color: #333;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;       
  justify-content: center;   
  min-height: 100vh;         
  text-align: center;        
}

.container {
  width: 90%;
  max-width: 500px;
  background: white;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin: 1rem auto;
}


h1 {
  text-align: center;
  font-size: 1.8rem;
  color: #4A90E2;
  margin-bottom: 1rem;
}

form {
  display: flex;
  flex-direction: column;
  gap: 1em;
}

label {
  font-weight: bold;
  color: #555;
}

input, select, button {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ddd;
  font-size: 1rem;
}

input:focus, select:focus {
  outline: none;
  border-color: #4A90E2;
  box-shadow: 0 0 5px rgba(74, 144, 226, 0.3);
}


button {
  background-color: #4A90E2;
  color: white;
  font-weight: bold;
  border: none;
  cursor: pointer;
  transition: background 0.3s ease;
}

button:hover {
  background-color: #357ABD;
}


h2 {
  text-align: center;
  margin-top: 2rem;
  font-size: 1.5rem;
  color: #333;
}


.profile {
  background: white;
  border: 1px solid #ddd;
  padding: 1rem;
  border-radius: 8px;
  margin-bottom: 1rem;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease-in-out;
}

.profile:hover {
  transform: scale(1.02);
}
