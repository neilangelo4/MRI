<div class="wrapper">
      
    <?php require_once 'includes/sidebar.php'; ?>

      <div class="main_content">
        <div class="header">Registration Form </div>
        <div class="info">
          <input type="date">
          <div class="name">
            <input type="text"  placeholder="First Name">
            <input type="text"  placeholder="Middle Name">
            <input type="text"  placeholder="Last Name">
          </div>
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female<br>
          <input type="text"  placeholder="Age">
          <input type="text"  placeholder="Occupation">
          <input type="radio" name="gender" value="Male">Single
          <input type="radio" name="gender" value="Female">Married
          <input type="radio" name="gender" value="Male">Spouse
          <input type="radio" name="gender" value="Female">Separated<br>
          <input type="date"  placeholder="Date of Birth">
          <input type="text"  placeholder="Place of Birth">
          <input type="text"  placeholder="Address">
          <div class="creds">
          <form action="/action_page.php" method="get">
            <input type="checkbox" name="vehicle" value="Bike"> Valid ID<br>
            <input type="checkbox" name="vehicle" value="Car" checked> Birth Certificate<br>
            <input type="checkbox" name="vehicle" value="Car" checked> NBI<br>
          </form>
          </div>
          <input type="submit">
        </div>