/**
 * Mocking client-server processing
 */
const _products = [
  { id: 1, src: "https://static8.muarecdn.com/zoom,80/100_100/muare/images/2019/02/22/5017100_1508406942-mc3a1ychie1babfuepsoneb-x05.jpg", title: "iPad 4 Mini", price: 500.01, quantity: 2 },
  { id: 2, src: "https://static8.muarecdn.com/zoom,80/100_100/muare/images/2019/02/27/5024270_xe-cc3a2n-be1bab1ng-cho-bc3a9-600x400.jpg", title: "H&M T-Shirt White", price: 10.99, quantity: 10 },
  { id: 3, src: "https://static8.muarecdn.com/zoom,80/100_100/muare/images/2019/02/27/5024322_b26857d40ec3ec9db5d2.jpg", title: "Charli XCX - Sucker CD", price: 19.99, quantity: 5 }
];

export default {
  getProducts(cb) {
    setTimeout(() => cb(_products), 3000);
  },

  buyProducts(products, cb, errorCb) {
    setTimeout(() => {
      // simulate random checkout failure.
      Math.random() > 0.5 || navigator.userAgent.indexOf("PhantomJS") > -1
        ? cb()
        : errorCb();
    }, 100);
  }
};
