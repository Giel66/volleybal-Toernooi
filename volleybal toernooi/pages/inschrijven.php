
<link rel="stylesheet" href="stylesheets\inschrijven.css">



<div class="login-container">
<div class="image-container">
    <img src="Volley transparent.png" alt="img">
</div class="image-container">
    <h2>Inschrijven</h2>
    <form>
            
        <div class="input-group">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" required>
        </div>

        <div class="input-group">
        <label for="naam">Klas</label>
        <select name="klas">
            <?php
            $klas = array("1A", "1B", "2A", "2B", "3A", "3B", "4A", "4B", "5A", "5B", "6A", "6B", "7A", "7B", "8A", "8B");
            foreach($klas as $klas){
                echo "<option value='$klas'>$klas</option>";
            }
            ?>
        </select>
    </div>
        <button type="submit">Login</button>
    </form>
</div>

