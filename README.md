High available container
==========
Example showing high availability in docker-compose network using Keepalived (VRRP protocol)

### Setup two hosts
After running these commands ip address 192.168.69.22 will be shared between Host A (192.168.69.2) and Host B (192.168.69.3). 
You can check that Host A has higher VRRP priority by visiting http://192.168.69.22
```
docker network create --subnet 192.168.69.0/24 vrrp
docker-compose up -d
```

### Setup failure for one of them
After running this command Host A will be unavailable and Host B will get its role.
You can try visiting http://192.168.69.22 again
```
docker-compose stop host-a
```
