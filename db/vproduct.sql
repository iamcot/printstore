CREATE OR REPLACE
    VIEW `v_products`
    AS
    SELECT p.*,
    (SELECT COUNT(p2.id) FROM laproducts p2 WHERE p2.lavariant_id = p.id) sumvariant,
    c1.id cat1id, c1.latitle cat1name, c1.laurl cat1url,c1.ladeleted cat1deleted,
    c1.isnews,
    COALESCE(c2.id,0) cat2id, COALESCE(c2.latitle,'') cat2name,COALESCE(c2.laurl,'') cat2url,
    COALESCE(c3.id,0) cat3id, COALESCE(c3.latitle,'') cat3name,COALESCE(c3.laurl,'') cat3url,
    f.id factorid, f.latitle factorname, f.laurl factorurl,
    (p.laoldprice - p.laprice) pricechange,
    (SELECT SUM(i.amount) FROM laorderitems i WHERE i.product_id = p.id OR i.variantid = p.id) numorder
     FROM laproducts p
    LEFT OUTER JOIN lamanufactors f
    ON f.id = p.lamanufactor_id
    LEFT OUTER JOIN lacategories c1
    ON c1.id = p.lacategory_id
    LEFT OUTER JOIN lacategories c2
    ON c1.laparent_id = c2.id
    LEFT OUTER JOIN lacategories c3
    ON c2.laparent_id = c3.id
    WHERE (p.ladeleted != 1 OR p.ladeleted IS NULL)
    AND p.lavariant_id = 0