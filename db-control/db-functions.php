<?php


//Prisijungimas prie //


DEFINE("NAME", "kertas");
DEFINE("PASSWORD", "root"); // arba root
DEFINE("HOST", "localhost");
DEFINE("USER", "root"); // arba root

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME ); //portas dar jeigu keistas MySQL arba Apasche

// if($prisijungimas) {
//   echo "Prisijungti pavyko";
// } else {
//   echo "Nepavyko prisijungti prie DB" . mysqli_connect_error();
// }

function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}
//production

function getProduct($id) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $getData = "SELECT * FROM products WHERE id = $id";
  $data = mysqli_query(getPrisijungimas(), $getData);
  $data = mysqli_fetch_assoc($data);
  return $data;
}

function getProduction($id=999) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $getData = "SELECT * FROM products LIMIT $id";
  $data = mysqli_query(getPrisijungimas(), $getData);
  return $data;
}

function deleteProduction($id) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $deleteData = "DELETE FROM products WHERE id=$id";
  $data = mysqli_query(getPrisijungimas(), $deleteData);
}

function insertProduction($title, $description, $img, $alt) {
  $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);
  $description = htmlspecialchars(strip_tags($description), ENT_QUOTES);
  $img = htmlspecialchars(strip_tags($img), ENT_QUOTES);
  $alt = htmlspecialchars(strip_tags($alt), ENT_QUOTES);
  $insertData = "INSERT INTO products VALUES (null , '$title' , '$description' , '$img' , '$alt')";
  $data = mysqli_query(getPrisijungimas(), $insertData);
}

function updateProduction($id, $title, $description, $img, $alt) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);
  $description = htmlspecialchars(strip_tags($description), ENT_QUOTES);
  $img = htmlspecialchars(strip_tags($img), ENT_QUOTES);
  $alt = htmlspecialchars(strip_tags($alt), ENT_QUOTES);
  $updateData = "UPDATE products SET title='$title', description='$description', img='$img', alt='$alt' WHERE id= $id LIMIT 1";
  $data = mysqli_query(getPrisijungimas(), $updateData);
}

//production done
//-------------------------------------------------------------------------------------------
//services

function getService($id) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $getData = "SELECT * FROM services WHERE id = $id";
  $data = mysqli_query(getPrisijungimas(), $getData);
  $data = mysqli_fetch_assoc($data);
  return $data;
}

function getServices($id=999) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $getData = "SELECT * FROM services LIMIT $id";
  $data = mysqli_query(getPrisijungimas(), $getData);
  return $data;
}

function deleteService($id) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $deleteData = "DELETE FROM services WHERE id=$id";
  $data = mysqli_query(getPrisijungimas(), $deleteData);
}

function insertService($title, $description, $img, $alt) {
  $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);
  $description = htmlspecialchars(strip_tags($description), ENT_QUOTES);
  $img = htmlspecialchars(strip_tags($img), ENT_QUOTES);
  $alt = htmlspecialchars(strip_tags($alt), ENT_QUOTES);
  $insertData = "INSERT INTO services VALUES (null , '$title' , '$description' , '$img', '$alt')";
  $data = mysqli_query(getPrisijungimas(), $insertData);
}

function updateService($id, $title, $description, $img, $alt) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $title = htmlspecialchars(strip_tags($title), ENT_QUOTES);
  $description = htmlspecialchars(strip_tags($description), ENT_QUOTES);
  $img = htmlspecialchars(strip_tags($img), ENT_QUOTES);
  $alt = htmlspecialchars(strip_tags($alt), ENT_QUOTES);
  $updateData = "UPDATE services SET title='$title', description='$description', img='$img', alt='$alt' WHERE id= $id LIMIT 1";
  $data = mysqli_query(getPrisijungimas(), $updateData);
}

//services done
//-------------------------------------------------------------------------------------------
//gallery

function getGalleryPic($id) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $getData = "SELECT * FROM gallery WHERE id = $id";
  $data = mysqli_query(getPrisijungimas(), $getData);
  $data = mysqli_fetch_assoc($data);
  return $data;
}

function getGalleryPics($id=999) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $getData = "SELECT * FROM gallery LIMIT $id";
  $data = mysqli_query(getPrisijungimas(), $getData);
  return $data;
}

function deleteGallery($id) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $deleteData = "DELETE FROM gallery WHERE id=$id";
  $data = mysqli_query(getPrisijungimas(), $deleteData);
}

function insertGallery($img, $img2, $alt) {
  $img = htmlspecialchars(strip_tags($img), ENT_QUOTES);
  $img2 = htmlspecialchars(strip_tags($img2), ENT_QUOTES);
  $alt = htmlspecialchars(strip_tags($alt), ENT_QUOTES);
  $insertData = "INSERT INTO gallery VALUES (null , '$img' , '$img2' , '$alt')";
  $data = mysqli_query(getPrisijungimas(), $insertData);
}

function updateGallery($id, $img, $img2, $alt) {
  $id = htmlspecialchars(strip_tags($id), ENT_QUOTES);
  $img = htmlspecialchars(strip_tags($img), ENT_QUOTES);
  $img2 = htmlspecialchars(strip_tags($img2), ENT_QUOTES);
  $alt = htmlspecialchars(strip_tags($alt), ENT_QUOTES);
  $updateData = "UPDATE gallery SET img='$img', img2='$img2', alt='$alt' WHERE id= $id LIMIT 1";
  $data = mysqli_query(getPrisijungimas(), $updateData);
}


?>
