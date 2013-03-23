#Flat Anchor

A bold, minimal (and responsive) theme for [AnchorCMS.](http://anchorcms.com)

---

##Usage

1. Copy the theme folder into your Anchor site's `themes` directory via FTP
2. Activate the theme in the Admin area -> Extend -> Metadata
3. Enjoy!

##Using your own logo

###Method #1

1. Copy your logo file to the theme's `img` directory
2. Open `header.php`
3. Modify line 91 with the name of your logo's file (as shown below)
```
    <img src="<?php echo theme_url(); ?>/img/your_logo.png" alt="">
```
4. Done!

###Method #2

1. Copy your logo file to the theme's `img` directory as `logo.png` and overwrite the file already there.
2. Done!

##Icons
Icons are provided by [Genericons.](http://genericons.com) A little ironic, I know. You may use any of the icons available from that site. However, instead of using `class="genericon-[iconName]"` use `class="icon-[iconName]"`

<small>A few less characters!</small>

---

##As Usual
Any comments and/or feedback is welcome!