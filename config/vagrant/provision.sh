apt-get update

# Install utility libraries
apt-get install -y curl

# Install add-apt-repository
apt-get install -y python-software-properties

# PHP Libraries
apt-get install -y php-pear

pear install --alldeps Net_SMTP MDB2 MDB2_Driver_mysql Mail Mail_Queue

# Install nginx
add-apt-repository -y ppa:nginx/stable
apt-get update -y

apt-get install -y nginx php5-fpm php5-cli php5-mysql php5-curl

cp /vagrant/config/nginx/nginx.conf /etc/nginx/nginx.conf
cp /vagrant/config/php5-fpm/www.conf /etc/php5/fpm/pool.d/www.conf
rm -f /etc/nginx/sites-enabled/default

# Install MySQL
echo mysql-server mysql-server/root_password password root | debconf-set-selections
echo mysql-server mysql-server/root_password_again password root | debconf-set-selections

apt-get install -y mysql-server

# Seed database.
if [[ -f /vagrant/db/seed.sql ]]; then
	mysql -u root -proot < /vagrant/db/seed.sql
fi

# Configure Virtual Hosting
mkdir -p /etc/nginx/sites
cp /vagrant/config/nginx/sites/* /etc/nginx/sites

# Install wp-cli
curl -L https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar > /home/vagrant/wp-cli.phar
mv /home/vagrant/wp-cli.phar /usr/bin/wp
chmod +x /usr/bin/wp

# Restart Services
service nginx restart
service php5-fpm restart
