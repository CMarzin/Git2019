# Git2019 > Ruby-on-rails

This project contains what we learn at school about [Ruby-on-rails](http://rubyonrails.org). :school_satchel:



# Setup Ruby-on-rails on Window

# Requirements

## Install Rake

1. Download Rails installer
Go on this site to download the installer
```bash
http://railsinstaller.org/
```

2. Install Rails and Rake with gem
```bash
gem install rails
gem install rake
```
To verify your installation you can type
```bash
rails --version
```
# Setup Ruby-on-rails on Mac/Linux

# Requirements

## Ruby
## RVM
## NodeJS

1. Installation Ruby
```bash
sudo apt-get update
sudo apt-get install git-core curl zlib1g-dev build-essential libssl-dev libreadline-dev libyaml-dev libsqlite3-dev sqlite3 libxml2-dev libxslt1-dev libcurl4-openssl-dev python-software-properties libffi-dev nodejs
```

Update your dependencies and install all dependencies required for Ruby

2. Install RVM (version 2.4.0 recommended)
```bash
sudo apt-get install libgdbm-dev libncurses5-dev automake libtool bison libffi-dev
gpg --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3
curl -sSL https://get.rvm.io | bash -s stable
source ~/.rvm/scripts/rvm
rvm install 2.4.0
rvm use 2.4.0 --default
ruby -v
```
The last step is to install Bundler

```bash
gem install bundler
```
3. Install Rails (version 5.0.1 recommended) and NodeJS
```bash
curl -sL https://deb.nodesource.com/setup_4.x | sudo -E bash -
sudo apt-get install -y nodejs
```
Now you can install Ruby-on-rails
```bash
gem install rails -v 5.0.1
```

Tada Rails is now installed on your computer,
You can test with :
```bash
rails -v
```
