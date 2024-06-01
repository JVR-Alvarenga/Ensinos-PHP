let dolar = 5.2

let usdInput = document.querySelector('#usd')
let brlInput = document.querySelector('#brl')

usdInput.addEventListener('keyup', () => {
    convert('usd-to-brl')
})
brlInput.addEventListener('keyup', () => {
    convert('brl-to-usd')
})

usdInput.addEventListener('blur', () => {
    usdInput.value = formatCurrency(usdInput.value)
})
brlInput.addEventListener('blur', () => {
    brlInput.value = formatCurrency(brlInput.value)
})

usdInput.value = '1000,00'

function convert(type){
    if(type === 'usd-to-brl'){
        let fixedvalue = fexValue(usdInput.value)

        let result = fixedvalue * dolar
        result = result.toFixed(2)

        brlInput.value = formatCurrency(result)
    }else if(type === 'brl-to-usd'){
        let fixedvalue = fexValue(brlInput.value)

        let result = fixedvalue / dolar
        result = result.toFixed(2)

        usdInput.value = formatCurrency(result)
    }
}

function formatCurrency(value){
    let fixedValue = fexValue(value)

    let opcoes = {
        useGrouping: false,
        minimumFractionDigits: 2
    }
    let formatter = new Intl.NumberFormat('pt-BR', opcoes)

    return formatter.format(fixedValue)
}


function fexValue(value){
    let fixedValue = value.replace(',', '.')

    let formatValue = parseFloat(fixedValue)

    if(formatValue === NaN){
        formatValue = 0
    }

    return formatValue
}
