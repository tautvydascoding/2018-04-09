// jshint esversion: 6

function Table(numOfRows, ...columnNames) {
  const lineSymbol = "-";
  const columnSymbol = "|";

  this.numOfRows = numOfRows;
  this.columnNames = columnNames;

  const rowLineLength = this.columnNames.join("").length + columnNames.length * 3 + 1;

  this.outputToHTML = function() {
    var output = "";

    for (var i = 0; i < numOfRows + 1; i++) {
      output += getLineString() + "<br>";
      if (i === 0) output += getColumnString(true, true) + "<br>";
      else output += getColumnString(false, true) + "<br>";
    }

    output += getLineString();
    document.querySelector(".table-output").innerHTML = output;
  };

  this.outputToConsole = function() {
    for (var i = 0; i < numOfRows + 1; i++) {
      console.log(getLineString());
      if (i === 0) console.log(getColumnString(true, false));
      else console.log(getColumnString(false, false));
    }

    console.log(getLineString());
  };

  function getLineString() {
    return lineSymbol.repeat(rowLineLength);
  }

  function getColumnString(withColumnNames, withNBSPs) {
    var spaceChar = withNBSPs ? "&nbsp;" : " ";

    var output = "";
    for (var i = 0; i < columnNames.length; i++) {
      var cellContent = withColumnNames ? columnNames[i] : spaceChar.repeat(columnNames[i].length);
      output += columnSymbol + " " + cellContent + " ";
    }

    output += columnSymbol;
    return output;
  }
}

var table = new Table(5, "VARDAS", "PAVARDE", "AMZIUS", "SALIS", "MIESTAS");
table.outputToConsole();
table.outputToHTML();

// end main.js
console.log("end main.js");
