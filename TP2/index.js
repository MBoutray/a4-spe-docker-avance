const redis = require('redis')
const express = require('express')

const client = redis.createClient({
    legacyMode: true,
    socket: {
        host: 'redis',
        port: 6379,
    },
})
const app = express()
const port = 3000

client.connect()

app.get('/', (req, res) => {
    client.incr('visits', (err, visits) => {
        if (err) {
            console.error(err)
            res.status(500).send(`Error: ${err}`)
            return
        }

        res.send(`You are visitor number ${visits}`)
    })
})

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})
