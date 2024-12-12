<?php

// Here are the functions related to get the posts from the database
function getAllPosts() {
    global $app_db;
    $result = mysqli_query($app_db,"SELECT * FROM posts");
    if (!$result) {
		die(mysqli_error($app_db));
	}
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}