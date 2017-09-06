# vcms-quick-starter

## installation and configurations

### get the sources

First thing first, you need to git clone this repository or download a version from the release section of github.

```
$ git clone https://github.com/vdegenne/vcms-quick-starter.git <project_name>
```

I recommand using wget as it won't download the .git directory

```
$ mkdir <project-name> && cd <project-name>
$ wget https://github.com/vdegenne/vcms-quick-starter/archive/<version>.tar.gz
$ tar --strip-components=1 -xzvf <version>.tar.gz
$ rm -f <version>.tar.gz
```

### Apache

Once it's downloaded and on your filesystem, you need to configure Apache to serve files from `./src/www` (or `./build/www` after the build).


### Development tools

By default, there is a starting application shell in `./src/www/components/_app`. You can just ignore and delete this directory if you wish to start from scratch or if you only attend to serve html files. The pre-build `app-shell.html` file is using some other components (e.g. `polymer-element.html`) so you should install the dependencies running the following command from the `www` public directory :

```
bower install
```

This will install all the files needed and you can continue to complexify the shell or still making another shell because the install is providing the environment with some great tools to start writing custom elements.


## Building

Vcms projects are using `gulp` for building from the `./src` directory. There is a `gulpfile.js` with a skeleton of a building workflow for the existing custom app-shell. Again, you can remove the gulp tasks if you don't use the default application shell.
If you use the existing gulp tasks or if you wish to use good development tools, check/modify the `devDependencies` entry in the `package.json` and run the following command :

```
yarn install
```