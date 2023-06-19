const redis = require('redis')
const express = require('express')

const client = redis.createClient({
    socket: {
        host: 'redis',
        port: 6379,
    },
})
const app = express()
const port = 3000

app.get('/', async (req, res) => {
    await client.connect()

    const totalViews = await client.incr('views')

    res.send(`Total views: ${totalViews}`)

    await client.disconnect()
})

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})
