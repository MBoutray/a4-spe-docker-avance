FROM node:18.16-alpine

EXPOSE 666

WORKDIR /app

COPY package*.json ./

RUN npm ci

COPY . .

CMD ["npm","start"]