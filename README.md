# php-file-content-searcher
File content or code search with PHP (Recursive Search in all Sub Folders)
A simple and flexible PHP tool that recursively searches specified directories for a term within files. It allows for custom folder exclusions and supports multiple search directories. Ideal for developers and system administrators who need an easy way to search through large codebases or directory structures.

Features
Multi-Directory Search: Specify multiple directories to search within.
Folder Exclusions: Easily exclude folders by defining their full path.
Recursive Search: Searches files recursively within directories.
Customizable Search Extensions: Filter files by extensions (e.g., .php, .tpl) to limit the scope.
Shell Command Execution: Uses shell commands (find and grep) for efficient searching.
Usage
This tool is especially helpful for developers working with large codebases or systems with complex directory structures.

Installation
1) Clone the repository:
git clone https://github.com/dkreddy9/php-file-content-searcher.git
2) config:
Place the fileSearchTool.php (or chosen filename) file in a web-accessible directory on your server.
Configuration
Open fileSearchTool.php and configure the following variables as needed:
$searchFolders: an array of directories to search within.
$excludedFolders: an array of directories to exclude (provide full paths). 
 

