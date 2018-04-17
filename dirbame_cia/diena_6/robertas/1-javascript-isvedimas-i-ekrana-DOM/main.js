// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

function Triangle(symbol, numOfRows) {
  this.symbol = symbol;
  this.numOfRows = numOfRows;
  this.print = function(flipped) {
    function printSymbolLine(numOfSymbols, symbol) {
      var line = "";
      for (var i = 0; i < numOfSymbols; i++) line += symbol;
      console.log(line);
    }

    if (flipped) {
      for (i = this.numOfRows; i > 0; i--) printSymbolLine(i, this.symbol);
      return;
    }

    for (var i = 1; i <= this.numOfRows; i++) printSymbolLine(i, this.symbol);
  };
}

function printTriangles(symbol, rowsInTriangle, times) {
  var triangle = new Triangle(symbol, rowsInTriangle, false);
  for (var i = 0; i < times; i++) triangle.print(i % 2 != 0);
}

printTriangles(":D ", 6, 10);
