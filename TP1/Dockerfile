FROM node:18.16-alpine

WORKDIR /app

COPY src/package*.json ./

RUN npm ci

COPY src/ ./

EXPOSE 3000

CMD ["npm","start"]