const express = require('express');
const fetch = require('node-fetch');
const dotenv = require('dotenv');

// .envファイルを読み込む
dotenv.config({ path: 'config.env' });

const app = express();
const PORT = process.env.PORT || 3000;

app.use(express.json());

app.post('/send-webhook', async (req, res) => {
    const { ip, dateTime } = req.body;

    const webhookUrl = process.env.DISCORD_WEBHOOK_URL;
    const payload = {
        content: `IPアドレス: ${ip}\n日時: ${dateTime}`
    };

    try {
        const response = await fetch(webhookUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(payload)
        });

        if (response.ok) {
