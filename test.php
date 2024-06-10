<?php
$sourceFolders = [
    'D:/Resume/',
    'D:/Resume/org/'
];

$destinationFolder = 'D:/down/';

if (isset($_POST['download'])) {
    $filenames = explode(',', $_POST['filenames']);
    $filesFound = [];

    $uniqueFolderName = $destinationFolder . uniqid('download_', true) . '/';

    if (!file_exists($uniqueFolderName)) {
        mkdir($uniqueFolderName, 0777, true);
    }

    foreach ($filenames as $filename) {
        $filename = trim($filename);
        $fileFound = false;

        foreach ($sourceFolders as $sourceFolder) {
            if (file_exists($sourceFolder . $filename)) {
                $fileFound = true;
                $destinationFilePath = $uniqueFolderName . $filename;
                copy($sourceFolder . $filename, $destinationFilePath);
                $filesFound[] = $filename;
                break;
            }
        }

        if (!$fileFound) {
            echo "File not found: " . $filename . "<br>";
        }
    }

    if (!empty($filesFound)) {
        echo "Files downloaded successfully to " . $uniqueFolderName . "<br>";
        echo "Downloaded files: " . implode(", ", $filesFound);
    } else {
        echo "No files were downloaded.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Download Files</title>
</head>

<body>
    <form method="post" action="">
        <label for="filenames">Enter file names (comma separated):</label>
        <input type="text" name="filenames" placeholder="file1.txt, file2.jpg, file3.pdf">
        <button type="submit" name="download">Download</button>
    </form>
</body>

</html>