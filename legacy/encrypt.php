<?php

function encrypt($item)
{
		if ($item == "1")           {$item = "stone";}
		elseif ($item == "2")           {$item = "grass";}
		elseif ($item == "3")           {$item = "dirt";}
		elseif ($item == "4")           {$item = "cobble";}
		elseif ($item == "5")           {$item = "wood";}
		elseif ($item == "6")           {$item = "sapling";}
		elseif ($item == "7")           {$item = "adminium";}
		elseif ($item == "8")           {$item = "water";}
		elseif ($item == "9")           {$item = "stillwater";}
		elseif ($item == "10")           {$item = "lava";}
		elseif ($item == "11")           {$item = "slava";}
		elseif ($item == "12")           {$item = "sand";}
		elseif ($item == "13")           {$item = "gravel";}
		elseif ($item == "14")           {$item = "goldore";}
		elseif ($item == "15")           {$item = "ironore";}
		elseif ($item == "16")           {$item = "coalore";}
		elseif ($item == "17")           {$item = "log";}
		elseif ($item == "18")           {$item = "leaves";}
		elseif ($item == "19")           {$item = "sponge";}
		elseif ($item == "20")           {$item = "glass";}
		elseif ($item == "21")           {$item = "lapislazuliore";}
		elseif ($item == "22")           {$item = "lazuliblock";}
		elseif ($item == "23")           {$item = "dispenser";}
		elseif ($item == "24")           {$item = "sandstone";}
		elseif ($item == "25")           {$item = "musicblock";}
		elseif ($item == "26")           {$item = "bedblock";}
		elseif ($item == "35")           {$item = "wool";}
		elseif ($item == "37")           {$item = "flower";}
		elseif ($item == "38")           {$item = "rose";}
		elseif ($item == "39")           {$item = "brownmushroom";}
		elseif ($item == "40")           {$item = "redmushroom";}
		elseif ($item == "41")           {$item = "gold";}
		elseif ($item == "42")           {$item = "iron";}
		elseif ($item == "43")           {$item = "doublestair";}
		elseif ($item == "45")           {$item = "brickwall";}
		elseif ($item == "46")           {$item = "tnt";}
		elseif ($item == "47")           {$item = "bookshelf";}
		elseif ($item == "48")           {$item = "mossycobblestone";}
		elseif ($item == "49")           {$item = "obsidian";}
		elseif ($item == "50")           {$item = "torch";}
		elseif ($item == "52")           {$item = "mobspawner";}
		elseif ($item == "53")           {$item = "woodstairs";}
		elseif ($item == "53")           {$item = "stair";}
		elseif ($item == "54")           {$item = "chest";}
		elseif ($item == "55")           {$item = "redstonewire";}
		elseif ($item == "56")           {$item = "diamondore";}
		elseif ($item == "57")           {$item = "diamond";}
		elseif ($item == "57")           {$item = "diamondblock";}
		elseif ($item == "58")           {$item = "workbench";}
		elseif ($item == "59")           {$item = "crops";}
		elseif ($item == "60")           {$item = "soil";}
		elseif ($item == "61")           {$item = "furnace";}
		elseif ($item == "62")           {$item = "litfurnace";}
		elseif ($item == "63")           {$item = "signblock";}
		elseif ($item == "64")           {$item = "wooddoorblock";}
		elseif ($item == "65")           {$item = "ladder";}
		elseif ($item == "66")           {$item = "rails";}
		elseif ($item == "67")           {$item = "stairs";}
		elseif ($item == "68")           {$item = "signblocktop";}
		elseif ($item == "69")           {$item = "lever";}
		elseif ($item == "70")           {$item = "stoneplate";}
		elseif ($item == "71")           {$item = "irondoorblock";}
		elseif ($item == "72")           {$item = "woodplate";}
		elseif ($item == "73")           {$item = "redstoneore";}
		elseif ($item == "74")           {$item = "redstoneorealt";}
		elseif ($item == "75")           {$item = "redstonetorchoff";}
		elseif ($item == "76")           {$item = "redstonetorchon";}
		elseif ($item == "77")           {$item = "button";}
		elseif ($item == "78")           {$item = "snow";}
		elseif ($item == "79")           {$item = "ice";}
		elseif ($item == "80")           {$item = "snowblock";}
		elseif ($item == "81")           {$item = "cactus";}
		elseif ($item == "82")           {$item = "clayblock";}
		elseif ($item == "83")           {$item = "reedblock";}
		elseif ($item == "84")           {$item = "jukebox";}
		elseif ($item == "85")           {$item = "fence";}
		elseif ($item == "86")           {$item = "pumpkin";}
		elseif ($item == "87")           {$item = "netherstone";}
		elseif ($item == "88")           {$item = "slowsand";}
		elseif ($item == "89")           {$item = "lightstone";}
		elseif ($item == "90")           {$item = "portal";}
		elseif ($item == "91")           {$item = "jacko";}
		elseif ($item == "92")           {$item = "cakeblock";}
		elseif ($item == "93")           {$item = "repeateroff";}
		elseif ($item == "94")           {$item = "repeateron";}
		elseif ($item == "256")             {$item = "ironshovel";}
		elseif ($item == "256")             {$item = "ironspade";}
		elseif ($item == "257")             {$item = "ironpickaxe";}
		elseif ($item == "257")             {$item = "ironpick";}
		elseif ($item == "258")             {$item = "ironaxe";}
		elseif ($item == "259")             {$item = "flintandsteel";}
		elseif ($item == "259")             {$item = "lighter";}
		elseif ($item == "260")             {$item = "apple";}
		elseif ($item == "261")             {$item = "bow";}
		elseif ($item == "262")             {$item = "arrow";}
		elseif ($item == "263")             {$item = "coal";}
		elseif ($item == "264")             {$item = "diamond";}
		elseif ($item == "265")             {$item = "ironbar";}
		elseif ($item == "266")             {$item = "goldbar";}
		elseif ($item == "267")             {$item = "ironsword";}
		elseif ($item == "268")             {$item = "woodsword";}
		elseif ($item == "269")             {$item = "woodshovel";}
		elseif ($item == "269")             {$item = "woodspade";}
		elseif ($item == "270")             {$item = "woodpickaxe";}
		elseif ($item == "270")             {$item = "woodpick";}
		elseif ($item == "271")             {$item = "woodaxe";}
		elseif ($item == "272")             {$item = "stonesword";}
		elseif ($item == "273")             {$item = "stoneshovel";}
		elseif ($item == "273")             {$item = "stonespade";}
		elseif ($item == "274")             {$item = "stonepickaxe";}
		elseif ($item == "274")             {$item = "stonepick";}
		elseif ($item == "275")             {$item = "stoneaxe";}
		elseif ($item == "276")             {$item = "diamondsword";}
		elseif ($item == "277")             {$item = "diamondshovel";}
		elseif ($item == "277")             {$item = "diamondspade";}
		elseif ($item == "278")             {$item = "diamondpickaxe";}
		elseif ($item == "278")             {$item = "diamondpick";}
		elseif ($item == "279")             {$item = "diamondaxe";}
		elseif ($item == "280")             {$item = "stick";}
		elseif ($item == "281")             {$item = "bowl";}
		elseif ($item == "282")             {$item = "bowlwithsoup";}
		elseif ($item == "282")             {$item = "soupbowl";}
		elseif ($item == "282")             {$item = "soup";}
		elseif ($item == "283")             {$item = "goldsword";}
		elseif ($item == "284")             {$item = "goldshovel";}
		elseif ($item == "284")             {$item = "goldspade";}
		elseif ($item == "285")             {$item = "goldpickaxe";}
		elseif ($item == "285")             {$item = "goldpick";}
		elseif ($item == "286")             {$item = "goldaxe";}
		elseif ($item == "287")             {$item = "string";}
		elseif ($item == "288")             {$item = "feather";}
		elseif ($item == "289")             {$item = "gunpowder";}
		elseif ($item == "290")             {$item = "woodhoe";}
		elseif ($item == "291")             {$item = "stonehoe";}
		elseif ($item == "292")             {$item = "ironhoe";}
		elseif ($item == "293")             {$item = "diamondhoe";}
		elseif ($item == "294")             {$item = "goldhoe";}
		elseif ($item == "295")             {$item = "seeds";}
		elseif ($item == "296")             {$item = "wheat";}
		elseif ($item == "297")             {$item = "bread";}
		elseif ($item == "298")             {$item = "leatherhelmet";}
		elseif ($item == "299")             {$item = "leatherchestplate";}
		elseif ($item == "300")             {$item = "leatherpants";}
		elseif ($item == "301")             {$item = "leatherboots";}
		elseif ($item == "302")             {$item = "chainmailhelmet";}
		elseif ($item == "303")             {$item = "chainmailchestplate";}
		elseif ($item == "304")             {$item = "chainmailpants";}
		elseif ($item == "305")             {$item = "chainmailboots";}
		elseif ($item == "306")             {$item = "ironhelmet";}
		elseif ($item == "307")             {$item = "ironchestplate";}
		elseif ($item == "308")             {$item = "ironpants";}
		elseif ($item == "309")             {$item = "ironboots";}
		elseif ($item == "310")             {$item = "diamondhelmet";}
		elseif ($item == "311")             {$item = "diamondchestplate";}
		elseif ($item == "312")             {$item = "diamondpants";}
		elseif ($item == "313")             {$item = "diamondboots";}
		elseif ($item == "314")             {$item = "goldhelmet";}
		elseif ($item == "315")             {$item = "goldchestplate";}
		elseif ($item == "316")             {$item = "goldpants";}
		elseif ($item == "317")             {$item = "goldboots";}
		elseif ($item == "318")             {$item = "flint";}
		elseif ($item == "319")             {$item = "meat";}
		elseif ($item == "319")             {$item = "pork";}
		elseif ($item == "320")             {$item = "cookedmeat";}
		elseif ($item == "320")             {$item = "cookedpork";}
		elseif ($item == "321")             {$item = "painting";}
		elseif ($item == "321")             {$item = "paintings";}
		elseif ($item == "322")             {$item = "goldenapple";}
		elseif ($item == "323")             {$item = "sign";}
		elseif ($item == "324")             {$item = "wooddoor";}
		elseif ($item == "325")             {$item = "bucket";}
		elseif ($item == "326")             {$item = "waterbucket";}
		elseif ($item == "327")             {$item = "lavabucket";}
		elseif ($item == "328")             {$item = "minecart";}
		elseif ($item == "329")             {$item = "saddle";}
		elseif ($item == "330")             {$item = "irondoor";}
		elseif ($item == "331")             {$item = "redstonedust";}
		elseif ($item == "332")             {$item = "snowball";}
		elseif ($item == "333")             {$item = "boat";}
		elseif ($item == "334")             {$item = "leather";}
		elseif ($item == "335")             {$item = "milkbucket";}
		elseif ($item == "336")             {$item = "brick";}
		elseif ($item == "337")             {$item = "clay";}
		elseif ($item == "338")             {$item = "reed";}
		elseif ($item == "339")             {$item = "paper";}
		elseif ($item == "340")             {$item = "book";}
		elseif ($item == "341")             {$item = "slimeorb";}
		elseif ($item == "342")             {$item = "storageminecart";}
		elseif ($item == "343")             {$item = "poweredminecart";}
		elseif ($item == "344")             {$item = "egg";}
		elseif ($item == "345")             {$item = "compass";}
		elseif ($item == "346")             {$item = "fishingrod";}
		elseif ($item == "347")             {$item = "watch";}
		elseif ($item == "348")             {$item = "lightstonedust";}
		elseif ($item == "348")             {$item = "lightdust";}
		elseif ($item == "349")             {$item = "rawfish";}
		elseif ($item == "349")             {$item = "fish";}
		elseif ($item == "350")             {$item = "cookedfish";}
		elseif ($item == "351")             {$item = "inksac";}
		elseif ($item == "352")             {$item = "bone";}
		elseif ($item == "353")             {$item = "sugar";}
		elseif ($item == "354")             {$item = "cake";}
		elseif ($item == "355")             {$item = "bed";}
		elseif ($item == "356")             {$item = "repeater";}
		elseif ($item == "401")             {$item = "fireworkrocket";}
		elseif ($item == "2256")             {$item = "goldrecord";}
		elseif ($item == "2257")             {$item = "greenrecord";}

		//Begin of Enemy encryption
		elseif ($item == "m1")           {$item = "Chicken";}
		elseif ($item == "m2")           {$item = "Cow";}
		elseif ($item == "m3")           {$item = "Creeper";}
		elseif ($item == "m4")           {$item = "Ghast";}
		elseif ($item == "m5")           {$item = "Pig";}
		elseif ($item == "m6")           {$item = "PigZombie";}
		elseif ($item == "m7")           {$item = "Sheep";}
		elseif ($item == "m8")           {$item = "Skeleton";}
		elseif ($item == "m9")           {$item = "Spider";}
		elseif ($item == "m10")           {$item = "Zombie";}
		elseif ($item == "m11")           {$item = "Wolf";}
		elseif ($item == "m12")           {$item = "Slime";}
		elseif ($item == "m13")           {$item = "Squid";}
		elseif ($item == "m14")           {$item = "Player";}
		elseif ($item == "m14")           {$item = "player";}
		elseif ($item == "m15")           {$item = "Enderman";}
		elseif ($item == "m16")           {$item = "CaveSpider";}
		elseif ($item == "m17")           {$item = "Spiderjockey";}
		elseif ($item == "m18")           {$item = "Giant";}
		elseif ($item == "m19")           {$item = "Monster";}
		elseif ($item == "m20")						{$item = "Blaze";}
		elseif ($item == "m21")						{$item = "Living Entity";}
		elseif ($item == "m22")						{$item = "Ender Dragon";}
		elseif ($item == "m23")						{$item = "Magma Cube";}
		elseif ($item == "m24")						{$item = "Silverfish";}
		elseif ($item == "m25")						{$item = "Snow Golem";}
		elseif ($item == "m26")						{$item = "Villager";}
		elseif ($item == "m27")						{$item = "Mooshroom";}
		//Begin of Damage encryption
		elseif ($item == "d0")						{$item = "total";}
		elseif ($item == "d1")						{$item = "drowning";}
		elseif ($item == "d2n")						{$item = "suffocation";}
		elseif ($item == "d3")						{$item = "fall";}
		elseif ($item == "d4")						{$item = "unknown";}
		elseif ($item == "d5")						{$item = "explosion";}
		else { $item = "$item";}
return $item;
}