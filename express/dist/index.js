const express = require('express')
const http = require('http')
const app = express()
const dotenv = require('dotenv')
dotenv.config()
app.use('/',(req, res) => {
    res.json('hello node')
})

app.use((req, res) => {
    res.status(404).json('Not Found')
})

const port = process.env.PORT
const server = http.createServer(app);

server.listen(port , () => {
    console.log(process.env.NODE_ENV)
    console.log(`app start on http://localhost:${port}`)
});