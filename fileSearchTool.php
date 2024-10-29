<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Search with Linux Commands</title>
</head>
<body>

<h1>File Search</h1>
<form method="post">
    <label for="searchTerm">Enter Search Term:</label>
    <input type="text" id="searchTerm" name="searchTerm" required>
    <br><br>
    <input type="submit" value="Search">
</form>

<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = escapeshellarg($_POST['searchTerm']); // Sanitize input for shell command
    
    // Set base directories for searching
    $searchFolders = [
       "your/folder/1/", // First search folder
        "your/folder/2/" ,  // Add additional folders as needed
        // Add more directories as needed
    ];

    // Define excluded folders with full paths
    $excludedFolders = [
        'excludedFolders/1/',
        'excludedFolders/2/',
        // Add more excluded folders as needed
    ];

    // Initialize the command
    $excludeConditions = '';

    // Build the exclude conditions for the find command
    foreach ($excludedFolders as $folder) {
        $excludeConditions .= "-path '$folder' -prune -o ";
    }

    // Initialize output variable
    $output = '';

    // Loop through each search folder and execute the command
    foreach ($searchFolders as $directory) {
        // Combine the find and grep commands
        $findCommand = "find $directory $excludeConditions -type f -print";
        $searchCommand = "$findCommand | xargs grep -inH $searchTerm";
 
        $output .= shell_exec($searchCommand);
    }

    // Display Results
    if (!empty($output)) {
        echo "<h2>Search Results for: \"$searchTerm\"</h2>";
        echo "<pre>$output</pre>";
    } else {
        echo "<p>No results found for \"$searchTerm\"</p>";
    }
}
?>



</body>
</html>
