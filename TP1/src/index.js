const express = require('express')

const app = express()
const port = 3000

app.get('/', async (req, res) => {
    res.send('Hello RER A !')
})

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})
