# phpCaptcha

![](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Farshetamine%2FphpCaptcha&count_bg=%23ab7def&title_bg=%23555555&icon=&icon_color=%23E7E7E7&title=hits&edge_flat=false)

##### Simple customizable captcha script for bot prevention in php language.

![](.screenshots/1.png)![](.screenshots/2.png)![](.screenshots/3.png)![](.screenshots/4.png)

![](.screenshots/5.png)![](.screenshots/6.png)![](.screenshots/7.png)![](.screenshots/8.png)

![](.screenshots/9.png)![](.screenshots/10.png)![](.screenshots/11.png)![](.screenshots/12.png)

![](.screenshots/13.png)![](.screenshots/14.png)![](.screenshots/15.png)![](.screenshots/16.png)

##### Usage  

```
<?php
session_start();
$status = "";

if ($_SESSION['captcha'] === $_POST['captcha']) {
    $status = "<p style='color: green;'>Captcha is correct!</p>";
} else {
    $status = "<p style='color: red;'>Captcha is invalid!</p>";
}
?>
```

```
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <img src="generate.php" alt="CAPTCHA">
    <div class="elem-group">
        <label for="captcha">Enter the captcha:</label>
        <br>
        <input type="text" id="captcha" name="captcha">
        <input type="submit" name="submit" value="Submit">
    </div>
</form>
```
###### Feel free to use it for your project 🥰.
