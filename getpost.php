

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "<br>";
        echo "Title: " . $row["title"]. "<br>";
        echo "Content: " . $row["content"]. "<br>";
        echo "img: " . $row["date"]. "<br><br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
