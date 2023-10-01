import requests
from bs4 import BeautifulSoup

# URL of the website you want to scrape
url = 'https://example.com'

# Send an HTTP GET request to the URL
response = requests.get(url)

# Check if the request was successful (status code 200)
if response.status_code == 200:
    # Parse the HTML content of the page
    soup = BeautifulSoup(response.text, 'html.parser')

    # Find and print specific elements (e.g., headings)
    headings = soup.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])
    for heading in headings:
        print(heading.text)

    # Find and print links
    links = soup.find_all('a')
    for link in links:
        print(link.get('href'))

    # Find and print paragraphs
    paragraphs = soup.find_all('p')
    for paragraph in paragraphs:
        print(paragraph.text)

else:
    print('Failed to retrieve the web page. Status code:', response.status_code)
