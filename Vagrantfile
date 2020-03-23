Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/eoan64"
  config.vm.network "public_network"
  config.vm.boot_timeout = 600
  config.vm.provider "virtualbox" do |vb|
    vb.gui = false
    vb.memory = "1024"
  end
  
  config.vm.synced_folder "/", "/var/www/html"

  config.vm.provision "shell", inline: <<-SHELL
    apt-get update    
    apt-get -y install nginx php php-fpm php7.3-sqlite sqlite3
    cp -f /vagrant/organizer.conf /etc/nginx/sites-available/default
    apt-get -y remove apache2
    sudo systemctl start nginx.service
SHELL

end
