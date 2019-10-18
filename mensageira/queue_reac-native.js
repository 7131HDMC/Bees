import { Connection, Exchange, Queue } from 'react-native-rabbitmq';

const config = {
    host:'18.218.249.157',
    port:5672,
    username:'admin',
    password:'admin',
    virtualhost:'vhost',
    ttl: 10000 // Message time to live,
    ssl: true // Enable ssl connection, make sure the port is 5671 or an other ssl port
}

let connection = new Connection(config);

connection.on('error', (event) => {

});

connection.on('connected', (event) => 
{

    let queue = new Queue( this.connection, {
        name: 'lgbt',
        passive: false,
        durable: true,
        exclusive: false,
        consumer_arguments: {'x-priority': 1}
    });

    let exchange = new Exchange(connection, {
        name: 'lgbt',
        type: 'direct',
        durable: true,
        autoDelete: false,
        internal: false
    });

    queue.bind(exchange, 'queue_name');

    // Receive one message when it arrives
    queue.on('message', (data) => {

    });

    // Receive all messages send with in a second
    queue.on('messages', (data) => {

    });

});

let message = "msg': 'socorro please', 'longitude': 14.46578, 'latitude':'-14.78789', 'time':'15.30'";
let routing_key = '';
let properties = {
    expiration: 10000
}
exchange.publish(data, routing_key, properties)
