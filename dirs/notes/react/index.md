# Notes--React

### Common Errors

Command: `npm start`. <br>
Expected: React dev sever to start. <br>
Outcome: create-react-app error thrown. <br>
Fix: 

```
npm install -g npm@latest
rm -rf node_modules
npm install
```

Or

```
npm ci
```
