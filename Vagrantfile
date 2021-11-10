# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "debian/bullseye64"
  config.vm.network "forwarded_port", guest: 80, host: 8080, id: "apache"
  config.vm.post_up_message = "http://localhost:8080"

  config.vm.provision "docker" do |d|
    d.build_image "/vagrant/", args: "-t webdns"
    d.run "webdns", args: "-p 80:80"
  end

end
