document.addEventListener("DOMContentLoaded", () => {
    const inputField = document.getElementById("input");
    inputField.addEventListener("keydown", (e) => {
        if (e.code === "Enter") {
            let input = inputField.value;
            inputField.value = "";
            output(input);
        }
    });
});

function output(input) {
    let product;
    let text = input.toLowerCase().replace(/[^\w\s]/gi, "").replace(/[\d]/gi, "").trim();
    text = text
        .replace(/ a /g, " ")
        .replace(/i feel /g, "")
        .replace(/whats/g, "what is")
        .replace(/please /g, "")
        .replace(/ please/g, "")
        .replace(/r u/g, "are you");

    if (compare(prompts, replies, text)) {
        product = compare(prompts, replies, text);
    } else if (text.match(/pyramids/gi)) {
        product = "The pyramids are ancient structures built primarily during Egypt's Old Kingdom period (circa 2686_2181 BCE). They served as monumental tombs for pharaohs and high-ranking officials. The most famous pyramids are located in Giza, near Cairo, and include the Great Pyramid of Giza, which is one of the Seven Wonders of the Ancient World.The pyramids remain one of the most enduring symbols of ancient Egypt and continue to captivate the imagination of people worldwide.And their names(Khufu(Cheops),Khafre (Chephren) & Menkaure (Mykerinos))";
    } else if (text.match(/egyption museum/gi)) {
        product = "The Egyptian Museum, also known as the Museum of Egyptian Antiquities, is one of the most significant and extensive museums in the world dedicated to ancient Egyptian history and artifacts. Located in Cairo, Egypt, it houses an unparalleled collection that spans thousands of years of Egyptian civilization.";
    }
    else if (text.match(/Qaitbay/gi)) {
        product = "The Citadel of Qaitbay is situated on the northern coast of Alexandria, Egypt, overlooking the Mediterranean Sea.The Citadel of Qaitbay is a historic fortress in Alexandria, Egypt, built by Sultan Qaitbay in the 15th century. It stands on the site of the ancient Lighthouse of Alexandria and features robust defensive architecture. Today, it is a major tourist attraction offering insights into medieval Egyptian military history and stunning views of the Mediterranean coast.";
    }
    else if (text.match(/alexandria library/gi)) {
        product = "Situated in Alexandria, Egypt, near the shores of the Mediterranean Sea.The Bibliotheca Alexandrina is a modern library in Alexandria, Egypt, designed to revive the spirit of the ancient Library of Alexandria. Opened in 2002, it features a distinctive architectural design and serves as a major center for knowledge, research, and cultural exchange, housing millions of books and offering various educational and cultural facilities.";
    }
    else if (text.match(/portsaid museum/gi)) {
        prodct = "Situated in Port Said, Egypt, which is located at the northern entrance of the Suez Canal.The Port Said Museum is a key cultural institution in Port Said, Egypt, established to preserve and display artifacts from various historical periods. It provides valuable insights into the history and development of the region, showcasing ancient Egyptian, Greco-Roman, and Islamic artifacts. The museum also highlights Port Said's significance as a major port city and its role in the construction of the Suez Canal.";
    }
    else if (text.match(/Hay Al Arab/gi)) {
        product("Situated in Port Said, Egypt, a city located at the northern entrance of the Suez Canal.The Arab District (Hay Al-Arab) in Port Said, Egypt, is a lively traditional neighborhood known for its bustling markets, historic architecture, and local shops. It provides a vibrant glimpse into daily life and commerce in the city, offering visitors a taste of traditional Egyptian culture and cuisine. The district remains a key area for understanding the cultural and social dynamics of Port Said.");
    }
    else if (text.match(/Abu Simbel/gi)) {
        product = "Located in the Nubian Desert, near Lake Nasser, southern Egypt.The Abu Simbel Temples, built by Pharaoh Ramses II in the 13th century BCE, are an iconic example of ancient Egyptian architecture and art. Located near Lake Nasser, the temples were relocated in the 1960s to prevent flooding from the Aswan High Dam. The Great Temple features colossal statues of Ramses II, while the Small Temple is dedicated to the goddess Hathor and Ramses II's queen, Nefertari. The temples are renowned for their grandeur and artistic detail, and they remain a major cultural and tourist attraction.";
    }
    else if (text.match(/Karnak/gi)) {
        product = "Situated in Luxor, Egypt, on the eastern bank of the Nile River.The Karnak Temple complex in Luxor, Egypt, is a vast and historically significant religious site dedicated primarily to Amun-Ra. Built over many centuries, it features impressive structures such as the Great Hypostyle Hall, monumental obelisks, and the Sacred Lake. The site is renowned for its architectural grandeur and intricate inscriptions, reflecting the power and influence of Thebes in ancient Egypt. Today, it is a UNESCO World Heritage Site and a major attraction for visitors interested in ancient Egyptian history and culture.";
    }
    else if (text.match(/Philae/gi)) {
        product = "Located on Philae Island in the Nile River, near Aswan, Egypt.The Philae Temple, located on Agilkia Island near Aswan, Egypt, is a well-preserved ancient religious site dedicated to the goddess Isis. Originally situated on Philae Island, the temple was relocated in the 1960s to avoid flooding from the Aswan High Dam. The complex features intricate architecture and detailed reliefs depicting Egyptian deities. It remains a key cultural and tourist site, showcasing the grandeur of ancient Egyptian religious practices and artistry.";
    }
    else if (text.match(/Edfu/gi)) {
        product = "Situated in Edfu, Upper Egypt, along the west bank of the Nile River.The Edfu Temple, located in Edfu, Upper Egypt, is a remarkably well-preserved ancient Egyptian temple dedicated to the falcon god Horus. Built during the Ptolemaic period between 237 BCE and 57 BCE, it features a grand entrance pylon, a hypostyle hall with massive columns, and a richly decorated sanctuary. The temple provides significant insights into ancient Egyptian religious practices and mythology, making it a key cultural and tourist site.";
    }
    else {
        product = alternative[Math.floor(Math.random() * alternative.length)];
    }
    addChat(input, product);
}

function compare(promptsArray, repliesArray, string) {
    let reply;
    let replyFound = false;
    for (let x = 0; x < promptsArray.length; x++) {
        for (let y = 0; y < promptsArray[x].length; y++) {
            if (promptsArray[x][y] === string) {
                let replies = repliesArray[x];
                reply = replies[Math.floor(Math.random() * replies.length)];
                replyFound = true;
                break;
            }
        }
        if (replyFound) {
            break;
        }
    }
    return reply;
}

function addChat(input, product) {
    const messagesContainer = document.getElementById("messages");

    let userDiv = document.createElement("div");
    userDiv.id = "user";
    userDiv.className = "user response";
    userDiv.innerHTML = `<img src="images/user.png" class="avatar"><span>${input}</span>`;
    messagesContainer.appendChild(userDiv);

    let botDiv = document.createElement("div");
    let botImg = document.createElement("img");
    let botText = document.createElement("span");
    botDiv.id = "bot";
    botImg.src = "images/robot1.png";
    botImg.className = "avatar";
    botDiv.className = "bot response";
    botText.innerText = "Typing...";
    botDiv.appendChild(botText);
    botDiv.appendChild(botImg);
    messagesContainer.appendChild(botDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight - messagesContainer.clientHeight;
    setTimeout(() => {
        botText.innerText = `${product}`;
        textToSpeech(product)
    }, 2000
    )

}