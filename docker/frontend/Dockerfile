FROM node:16

# Install dependencies
RUN apt-get update && apt-get install -y \
    vim \
    zip \
    unzip \
    curl

# Change current user
USER root

EXPOSE 8531
CMD ["sh", "-c", "npm install && npm run dev"]