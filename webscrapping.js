const axios = require('axios');
const cheerio = require('cheerio');

const url = 'https://example.com';

async function scrapeWebsite() {
    try {
        const response = await axios.get(url);
        const $ = cheerio.load(response.data);

        $('h1').each((index, element) => {
            console.log($(element).text());
        });

        $('a').each((index, element) => {
            const link = $(element).attr('href');
            console.log(link);
        });
    } catch (error) {
        console.error('Error occurred:', error);
    }
}

scrapeWebsite();
