# mouse_toggle_mousewheel
Scripts to toggle middle mousewheel on and off for X11 and Wayland



## Installation
These are simple php scripts. If you do not have php you can install php-cli to install php without apache and a bunch of dependancies.
Mark these as executable, remove the .php extension and place in a system or user bin directory to run from any anywhere.

Or run by calling

```bash
php mouse_toggle_mouswheel_x11.php
```

mouse_toggle_mouswheel_x11.php uses xinput and may require modifications depending on your hardware
mouse_toggle_mouswheel_wayland.php requires wl-clipboard
```bash
sudo apt-get install wl-clipboard
```

