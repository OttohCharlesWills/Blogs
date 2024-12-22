<?php
// Define where to store uploaded images
$upload_dir = 'assets/uploads/';
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true); // Create the directory if it doesn't exist
}

if (!empty($_FILES['file']['name'])) {
    $file = $_FILES['file'];
    $file_name = basename($file['name']);
    $target_file = $upload_dir . $file_name;

    // Move uploaded file to the uploads directory
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        // Return the file path for TinyMCE
        echo json_encode(['location' => $target_file]);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to upload image.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'No file uploaded.']);
}
?>
