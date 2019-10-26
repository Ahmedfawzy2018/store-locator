<!DOCTYPE html>
<html>
<head>
  <title>Store Locator with google map</title>
     <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="store.js"></script>
</head>
<body>
<?php include('locator.php');

    $query = mysqli_query($conn,"SELECT location_id, name, address, geocode, telephone, fax, image, open, comment FROM location ");
  
 ?>

      <div class="container" id="maps-locator-div">
        <div class="row">
            <div class="col-md-3 storelocator-panel" id="panel">
            <form class="storelocator-filter" id="searchForm">
              <div class="location-search">
                <h4> Where are you ?</h4>
                <label id="result"></label>
                <input type="text" id="address" name="address" placeholder="{{ site_location_enter }}" aria-label="Search Address Input" autocomplete="new-password">
                <input id="submit" type="button" value="Search">
                <br />
              </div>


              <div class="feature-filter"></div>
            </form>
            <ul class="store-list">
            <?php while($row = mysqli_fetch_assoc($query)) : ?>
              <li class="store" id="">
              <input type="hidden" name="addresslo" id="addresslo" value="<?php echo $row['location_id']; ?>" >
                <div class="store" id="addressfind" name="addressfind"> 
                  <div class="title"><?php echo $row['name']; ?> 
                  </div> 
                 

                  <div class="address">
                  <?php echo $row['address'] .'  '.$row['geocode'] ?> <br> 
                  <?php echo $row['telephone'] .' - '.$row['fax'] ?> <br>
                   <?php echo $row['comment'] .'  '.$row['open'] ?></div>
                  <ul class="feature"></ul>
                </div>
              </li>
            <?php endwhile ; ?>
            </ul>
            </div>
            <div class="col-md-offset-0 col-md-8" id="map">
            </div> 
  



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIyqaj_vYHBGogXIqMBsmqw6rs6Z3u8Yc&callback=initMap&libraries=places&language=en" async defer></script>
</body>
</html>

