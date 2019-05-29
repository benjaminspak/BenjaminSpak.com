### Setting up the PHP & Larvel Environment

#### Composer

- [https://getcomposer.org/download/](https://getcomposer.org/download/)
- Download and install Composer via terminal. If you're on Windows ... dual boot with Linux.

- After downloading and install Composer move the composer file into your local path `$`.
- This will allow you to call the 'composer' command directly - without in including the path.

```bash
mv composer.phar /usr/local/bin/composer
```

#### Laravel

Error: 

laravel/installer v2.1.0 requires ext-zip * -> the requested PHP extension zip is missing from your system. <br>

Fix:

```
sudo apt-get install php7.2-zip
```

Run Laravel install command

```bash
composer global require "laravel/installer"
```

Verify global install location

```bash
cd ~/.config/composer/vendor/bin
```

Error:

laravel command not found setting path does not work

Fix:

Open your bash config and add the path.

```
sudo nano ~/.bashrc
```

Add the global install path at the end

```
export PATH=~/.config/composer/vendor/bin:$PATH
```

Load the changes into your current terminal session

```
source .bashrc
```

You are now ready to create a new working directory for your project & call `laravel new`.