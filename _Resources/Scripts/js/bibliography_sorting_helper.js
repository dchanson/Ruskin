(function(){
    clear();
    let section = $($(".subsection")[3]);

    let lis = section.find('ul').find('>li')

    let messages = lis.map(function(){
        return $(this).text();
    }).toArray();
    
    
    const clean = (x) => {
        x = x
            .trim()
            .toLowerCase()
            .replace(/\s+/g, ' ')
            .replace(/[\n“\[]/g, '')
            .replace(/^the /g, '')
            .replace(/ (a|an|the) /, ' ')
            .replace(/^a /g, '')
            .replace(/[,.‐”‘’:;\(\)ʼ]/g, '')
            .replace(/^an /g, '')
            .trim();
        return x;
    }
    
    const ignored = [];
    return messages.map((x, i) => {
        if(ignored.indexOf(i) >= 0) return 0;

        if(i == 0) return 0;
        else{
            let thisMsg = clean(x);
            let previousMsg = clean(messages[i-1]);
        
            if(thisMsg < previousMsg){
                return {
                    msg: thisMsg,
                    prev: previousMsg
                    };
            }
            return 0;
        }
    }).map((x, i) => {return {msg: x.msg, prev: x.prev, i}}).filter(x => x.msg);
})();
