<?php
echo '<form action="P2Form.php" method="post">
  <h1>Salads</h1>
  <h2>Salad Greens</h2>
  <label>
    <input type="checkbox" name="leaves" value="iceberg">&nbsp;
    Iceberg Lettuce
  </label>
  <label>
    <input type="checkbox" name="leaves" value="romaine">&nbsp;
    Romaine Lettuce
  </label>
  <label>
    <input type="checkbox" name="leaves" value="spinach">&nbsp;
    Spinach
  </label>
  <label>
    <input type="checkbox" name="leaves" value="arugula">&nbsp;
    Arugula
  </label>
  <h2>Veggies</h2>
    <label>
      <input type="checkbox" name="veggie" value="tomato">&nbsp;
      Tomato
    </label>
    <label>
      <input type="checkbox" name="veggie" value="cucumber">&nbsp;
      Cucumber
    </label>
    <label>
      <input type="checkbox" name="veggie" value="bellpepper">&nbsp;
      Bell Pepper
    </label>
    <label>
      <input type="checkbox" name="veggie" value="mushroom">&nbsp;
      Mushroom
    </label>
  <h2>Meat</h2>
  <label>
    <input type="radio" name="meat" value="chicken">&nbsp;
    Chicken&nbsp;&nbsp;<small><em>$1</em></small>
  </label>
  <label>
    <input type="radio" name="meat" value="salmon">&nbsp;
    Salmon&nbsp;&nbsp;<small><em>$1</em></small>
  </label>
  <label>
    <input type="radio" name="meat" value="shrimp">&nbsp;
  </label>
  <label>
    <input type="radio" name="meat" value="steak">&nbsp;
    Steak&nbsp;&nbsp;<small><em>$2</em></small>
  </label>
  <h2>Extras</h2>
  <label>
    <input type="checkbox" name="extra" value="cheddar">&nbsp;
    Cheddar Cheese
  </label>
  <label>
    <input type="checkbox" name="extra" value="feta">&nbsp;
    Feta Cheese
  </label>
  <label>
    <input type="checkbox" name="extra" value="croutons">&nbsp;
    Croutons
  </label>
  <br><br>
  <select name="amount">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
  </select>&nbsp;
  <input type="submit" name="submitSalad">
</form>
';
