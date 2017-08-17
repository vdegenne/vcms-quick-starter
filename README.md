# vcms-quick-starter

## installation

First thing first, you need to git clone this repository or download from the release section of github.

```
$ git clone https://github.com/vdegenne/vcms-quick-starter.git <project_name>
```

I recommand using wget as it won't download the .git directory

```
$ wget https://github.com/vdegenne/vcms-quick-starter/archive/<version>.tar.gz
$ mkdir <project-name>
$ tar xzvf <version>.tar.gz -C <project-name>
$ rm -f <version>.tar.gz
```
### dependencies

Once you have your project directory, you may want to go inside and install the dependencies.
The dependencies are a set of bower tools (polymer, vcms-polymer, ...) and starting web components
that helps to build nice and modular application in the vcms environment.

```
$ cd <project_name> && bower install
```