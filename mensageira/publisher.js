#!/usr/bin/env node

var amqp = require('amqplib/callback_api');

var sosLocation = "{'Latitude' : 14.21234,'Longitude': -23.4456,	'SOS': 'Estou em panico, me ajude!!! Ligue para a policia! Por favor', 'TimePanico' : 12.5 }";

amqp.connect('amqp://18.218.249.157', function(error0, connection) {
    if (error0) {
        throw error0;
    }
    connection.createChannel(function(error1, channel) {
        if (error1) {
            throw error1;
        }

        var queue = 'panico';
        var msg = sosLocation;

        channel.assertQueue(queue, {
            durable: false
        });
        channel.sendToQueue(queue, Buffer.from(msg));

        console.log(" [x] Sent %s", msg);
    });
    setTimeout(function() {
        connection.close();
        process.exit(0);
    }, 500);
});